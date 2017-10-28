<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bandas Model
 *
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property |\Cake\ORM\Association\HasMany $Avaliacao
 * @property \App\Model\Table\EstilosTable|\Cake\ORM\Association\BelongsToMany $Estilos
 *
 * @method \App\Model\Entity\Banda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banda findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BandasTable extends Table
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

        $this->setTable('bandas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Avaliacao', [
            'foreignKey' => 'banda_id'
        ]);
        $this->belongsToMany('Estilos', [
            'foreignKey' => 'banda_id',
            'targetForeignKey' => 'estilo_id',
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
            ->scalar('nome_banda')
            ->requirePresence('nome_banda', 'create')
            ->notEmpty('nome_banda');

        $validator
            ->date('data_inicio')
            ->allowEmpty('data_inicio');

        $validator
            ->scalar('endereco')
            ->allowEmpty('endereco');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
