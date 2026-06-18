<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class TypebTypecLinksTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsTo('Typeb');
        $this->belongsTo('Typec');
    }
}
