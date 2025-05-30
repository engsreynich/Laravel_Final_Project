<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailVerifiedAtToTeachersTable extends Migration
{
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->timestamp('email_verified_at')->nullable()->after('remember_token');
        });
    }

    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('email_verified_at');
        });
    }
}