<?php
App::uses('CakeEmail', 'Network/Email');
class MessagesController extends AppController
{
    public $helpers = array('Html');
    public $allowComponentsAdmin = array();
    public $allowComponentUser = array();
    public $allowComponentGuest = array();
    public function beforeFilter() {
        parent::beforeFilter();
        // Permet aux utilisateurs de s'enregistrer et de se déconnecter
        $this->Auth->allow();
    }
    
    public function isAuthorized() {
        // Tous les users inscrits peuvent ajouter des commentaires
        if (in_array($this->action,$this->allowComponentsAdmin))
        {
            return true;
        } elseif (in_array($this->action,$this->allowComponentUser)) {
            return true;
        } elseif (in_array($this->action,$this->allowComponentGuest)) {
            return true;
        } else {
            return false;
        }
        return parent::isAuthorized($user);
    }
    public function index()
    {
        
    }
    
    public function ajaxAddMessage()
    {
        $result =true;
        $this->layout = 'empty';
        $ip_address = $this->request->clientIp();
        $dayDate = date('Y-m-d');
        
        
         $searchDayMsg = $this->Message->find('count',
                             array(
                                'conditions' => array(
                                    "date_format(created,'%Y-%m-%d')" => $dayDate,
                                    'ip_address' => $ip_address
                                )
                             ));
        
        if ($searchDayMsg <= 2)
        {
            
            $this->request->data['ip_address'] = $this->request->clientIp();
            if ($this->Message->save($this->data))
            {
                $messageSite = "
Bonjour, 
Vous avez reçu le message suivant de ".$this->request->data['name']." :

Nom: ".$this->request->data['name']."
Email: ".$this->request->data['email']."
Téléphone: ".$this->request->data['phone']."
Message:
".$this->request->data['message']." 


Mail automatique envoyé par le site www.communic8.fr.
";
                CakeEmail::deliver('aymeric.matheossian@gmail.com', 'Communic8 - Nouveau message', $messageSite, array('from' => 'formulaire-contact@communic8.fr'));
                $this->Session->setFlash("Votre message a été envoyé avec succès, nous vous recontacterons au plus tôt.",'flash_success',array(),'message');
            } else {
                $this->Session->setFlash("Erreur durant l'envoi de votre message.",'flash_error',array(),'message');
                 $result = false;
            }
        } else {
            $this->Session->setFlash("2 messages ont déjà été envoyé aujourd'hui, limite atteinte (2 messages par jour).",'flash_error',array(),'message');
            $result = false;
        }
        $this->set('result',$result);
    }
}
?>