<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class NomadInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('nomad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->string('nomad_version')->nullable();
            $table->string('nomad_login_version')->nullable();
            $table->boolean('nomad_enabled')->nullable();
            $table->boolean('nomad_login_enabled')->nullable();
            $table->string('nomad_user')->nullable();
            $table->string('addomain')->nullable();
            $table->string('kerberos_realm')->nullable();
            $table->boolean('use_keychain')->nullable();
            $table->boolean('local_password_sync')->nullable();

            $table->unique('serial_number');
            $table->index('nomad_version');
            $table->index('nomad_login_version');
            $table->index('nomad_user');
            $table->index('addomain');
            $table->index('kerberos_realm');

        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('nomad');
    }
}
