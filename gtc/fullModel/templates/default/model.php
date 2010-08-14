<?php
/**
 * This is the template for generating the model class of a specified table.
 * In addition to the default model Code, this adds the CSaveRelationsBehavior
 * to the model class definition.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 */
?>
<?php echo "<?php\n"; ?>

class <?php echo $modelClass; ?> extends <?php echo 'Base' . $modelClass."\n"; ?>
{
	// Add your model-specific methods here. This file will not be overriden by gtc except you force it.

	public function init()
  {
		return parent::init();
  }

	public function rules() 
	{
		// $rules = array();
		// return array_merge(parent::rules(), $rules);
		return parent::rules();
	}
}