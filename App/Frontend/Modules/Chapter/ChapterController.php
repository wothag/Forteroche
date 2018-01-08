<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 08/01/2018
 * Time: 21:16
 */

namespace App\Frontend\Modules\Chapter;
use \OCFram\BackController;
use \OCFram\HTTPRequest;
use \Entity\Comment;
use \FormBuilder\CommentFormBuilder;
use \OCFram\FormHandler;
class ChapterController extends BackController
{
	public function executeIndex(HTTPRequest $request)
	{
		$chapterNumber = $this->app->config()->get('chapter_number');
		$characterNumber = $this->app->config()->get('character_number');

		$this->page->addVar('title', 'Billet simple pour l\'Alaska');
		$this->page->addVar('header', 'big');
		$this->page->addVar('button', 'display');
		$manager = $this->managers->getManagerOf('Chapter');

		$listChapters = $manager->getList(0, $chapterNumber);

		foreach ($listChapters as $chapter)
		{
			if (strlen($chapter->content()) > $characterNumber)
			{
				$start = substr($chapter->content(), 0, $characterNumber);
				$start = substr($start, 0, strrpos($start, ' ')) . '...';

				$chapter->setContent($start);
			}
		}

		$this->page->addVar('listChapters', $listChapters);
		$this->page->addVar('listChapter', $manager->getList());
	}

	public function executeShow(HTTPRequest $request)
	{
		$manager = $this->managers->getManagerOf('Chapter');
		$chapter = $manager->getUnique($request->getData('id'));
		$managerUser = $this->managers->getManagerOf('User');

		if (empty($chapter))
		{
			$this->app->httpResponse()->redirect404();
		}
		else
		{
			$comments = $this->managers->getManagerOf('Comments')->getListOf($chapter->id());
		}
		$this->page->addVar('listChapter', $manager->getList());
		$this->page->addVar('title', $chapter->title());
		$this->page->addVar('chapter', $chapter);
		$this->page->addVar('comments', $comments);
		$this->page->addVar('managerUser', $managerUser);
	}
	public function executeWriter(HTTPRequest $request)
	{
		$this->page->addVar('title', 'Jean Forteroche');
		$manager = $this->managers->getManagerOf('Chapter');
		$this->page->addVar('listChapter', $manager->getList());
	}
	public function executeContact(HTTPRequest $request)
	{
		if ($request->method() == 'POST')
		{
			$subject = $request->postData('title');
			$email = $request->postData('email');
			$headers = 'From: '.$email;
			$to = 'gwen.dumoulin@gmail.com';
			$message = $request->postData('message');
			$message_mail = 'Vous avez recu un message depuis le site de Jean Forteroche. Voici le message : "'.$message.'"';
			if ((!empty($subject)) AND (!empty($email)) AND (!empty($message))) {
				mail($to, $subject, $message_mail, $headers);
				$this->app->user()->setFlash('<div class="alert alert-success" role="alert">Le message a bien été envoyé à l\'administrateur.</div>');
				$this->app->httpResponse()->redirect('/contact.html');
			}
		}
		$this->page->addVar('title', 'Contacter l\'administrateur');
		$manager = $this->managers->getManagerOf('Chapter');
		$this->page->addVar('listChapter', $manager->getList());
	}
	public function executelegalNotice(HTTPRequest $request)
	{
		$this->page->addVar('title', 'Mentions légales');
		$manager = $this->managers->getManagerOf('Chapter');
		$this->page->addVar('listChapter', $manager->getList());
	}
}