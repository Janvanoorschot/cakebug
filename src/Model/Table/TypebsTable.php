<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class TypebsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->belongsToMany('Typea', [
            'through' => 'TypeaTypebLinks',
        ]);
        $this->belongsToMany('Typec', [
            'through' => 'TypebTypecLinks',
        ]);
    }
}
