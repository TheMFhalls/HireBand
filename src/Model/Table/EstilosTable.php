<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estilos Model
 *
 * @property \App\Model\Table\BandasTable|\Cake\ORM\Association\BelongsToMany $Bandas
 *
 * @method \App\Model\Entity\Estilo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estilo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estilo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estilo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estilo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estilo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estilo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstilosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('estilos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Bandas', [
            'foreignKey' => 'estilo_id',
            'targetForeignKey' => 'banda_id',
            'joinTable' => 'bandas_estilos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}
