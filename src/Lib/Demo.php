<?php
declare(strict_types=1);

namespace App\Lib;


use Cake\ORM\TableRegistry;

class Demo
{
    public function __construct()
    {

    }

    public function demonstration()
    {
        // JvO: seperate function to isolate added demonstration code
        $typeas = TableRegistry::getTableLocator()->get('Typeas');
        $typebs = TableRegistry::getTableLocator()->get('Typebs');
        $typecs = TableRegistry::getTableLocator()->get('Typecs');
        $typea_typeb_links = TableRegistry::getTableLocator()->get('TypeaTypebLinks');
        $typeb_typec_links = TableRegistry::getTableLocator()->get('TypebTypecLinks');

        $a2 = $typeas->find()->where("name='a2'")->first();
        $a2_id = $a2['id'];
        $complete_a2 = $typeas->get($a2_id, contain: 'Typebs');
        $bs = $complete_a2['typebs'];
        $typea_typeb_links->deleteAll(['typea_id' => $a2_id]);
        foreach($bs as $b) {
            $b_id = $b['id'];
            $count = $typea_typeb_links->find()->where(['typeb_id' => $b_id])->count();
            if($count <= 0) {
                $complete_b = $typebs->get($b_id, contain: 'Typecs');
            }
        }
        return true;
    }

}
