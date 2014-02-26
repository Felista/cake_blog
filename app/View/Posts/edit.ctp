public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $post;
    }
}