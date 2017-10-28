<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BandasEstilos Model
 *
 * @property \App\Model\Table\BandasTable|\Cake\ORM\Association\BelongsTo $Bandas
 * @property \App\Model\Table\EstilosTable|\Cake\ORM\Association\BelongsTo $Estilos
 *
 * @method \App\Model\Entity\BandasEstilo get($primaryKey, $options = [])
 * @method \App\Model\Entity\BandasEstilo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BandasEstilo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BandasEstilo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BandasEstilo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BandasEstilo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BandasEstilo findOrCreate($search, callable $callback = null, $options = [])
 */
class BandasEstilosTable extends Table
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

        $this->setTable('bandas_estilos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Bandas', [
            'foreignKey' => 'banda_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estilos', [
            'foreignKey' => 'estilo_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['banda_id'], 'Bandas'));
        $rules->add($rules->existsIn(['estilo_id'], 'Estilos'));

        return $rules;
    }
}
