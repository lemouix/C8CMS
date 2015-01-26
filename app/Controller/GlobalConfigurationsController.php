<?php
class GlobalConfigurationsController extends AppController {
    
    public function edit()
    {
        $this->layout = 'backoffice';
        if ($this->request->is(array('post', 'put')))
        {
            if ($this->GlobalConfiguration->save($this->request->data))
            {
                $this->Session->setFlash("Les informations ont été sauvegardées avec succès.",'flash_success');
                $this->redirect(array('action' => 'edit'));
            }
        }
        $this->request->data = $this->GlobalConfiguration->find('first');
    }
    
}
?>