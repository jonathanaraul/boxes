<?php

class SessionController extends BaseController {


    /**
     * Returns all the online-users
     *
     * @return View
     */
    public function getIndex()
    {

        // Get all the blog posts
        $users = User::all();

        // Show the page
        return View::make('site/blog/online_users', array($users));
    }

    /**
     * View a blog post.
     *
     * @param  string  $slug
     * @return View
     * @throws NotFoundHttpException
     */
    public function getView($slug)
    {
        // Get this blog post data
        $post = $this->post->where('slug', '=', $slug)->first();

        // Check if the blog post exists
        if (is_null($post))
        {
            // If we ended up in here, it means that
            // a page or a blog post didn't exist.
            // So, this means that it is time for
            // 404 error page.
            return App::abort(404);
        }

        // Get this post comments
        $comments = $post->comments()->orderBy('created_at', 'ASC')->get();

        // Get current user and check permission
        $user = $this->user->currentUser();
        $canComment = false;
        if(!empty($user)) {
            $canComment = $user->can('post_comment');
        }

        // Show the page
        return View::make('site/blog/view_post', compact('post', 'comments', 'canComment'));
    }

}
