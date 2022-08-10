<?php

declare(strict_types=1);

namespace OCA\NdcRegistration\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\SimpleMigrationStep;
use OCP\Migration\IOutput;

/**
 * Auto-generated migration step: Please modify to your needs!
 */
class Version010203Date20220809140143 extends SimpleMigrationStep {

	/**
	 * @param IOutput $output
	 * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
	 * @param array $options
	 */
	public function preSchemaChange(IOutput $output, Closure $schemaClosure, array $options) {
	}

	/**
	 * @param IOutput $output
	 * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
	 * @param array $options
	 * @return null|ISchemaWrapper
	 */
	public function changeSchema(IOutput $output, Closure $schemaClosure, array $options) {
		/** @var ISchemaWrapper $schema */
		$schema = $schemaClosure();

		if (!$schema->hasTable('registration')) {
			$table = $schema->createTable('registration');
			$table->addColumn('id', 'integer', [
				'autoincrement' => true,
				'notnull' => true,
				'unsigned' => true,
			]);
			$table->addColumn('email', 'string', [
				'notnull' => true,
			]);
			$table->addColumn('username', 'string', [
				'notnull' => false,
			]);
			$table->addColumn('password', 'string', [
				'notnull' => false,
			]);
			$table->addColumn('displayname', 'string', [
				'notnull' => false,
			]);
			$table->addColumn('group', 'string', [
				'notnull' => true,
			]);
			$table->addColumn('is_import', 'boolean', [
				'notnull' => false,
				'default' => false,
			]);
			$table->addColumn('email_confirmed', 'boolean', [
				'notnull' => false,
				'default' => false,
			]);
			$table->addColumn('token', 'string', [
				'notnull' => true,
			]);
			$table->addColumn('client_secret', 'string', [
				'notnull' => false,
			]);
			$table->addColumn('requested', 'datetime', [
				'notnull' => true,
			]);
			$table->setPrimaryKey(['id']);
		}
		return $schema;
	}

	/**
	 * @param IOutput $output
	 * @param Closure $schemaClosure The `\Closure` returns a `ISchemaWrapper`
	 * @param array $options
	 */
	public function postSchemaChange(IOutput $output, Closure $schemaClosure, array $options) {
	}
}
