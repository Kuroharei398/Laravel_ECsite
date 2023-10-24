<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // ユーザーテーブル
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ユーザID
            $table->string('mail_address', 128)->unique(); // メールアドレス
            $table->string('password', 64); // パスワード
            $table->string('user_name', 30); // ユーザ名
            $table->tinyInteger('user_authority')->default(0); // 権限
            $table->tinyInteger('user_status')->default(0); // ステータス
            $table->timestamps(); // 登録日時・更新日時
        });

        // 支払い情報テーブル
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->unique();
            $table->string('card_number', 16); // カード番号を文字列として設定
            $table->string('card_kind', 1); // カード種別を文字列として設定
            $table->unsignedSmallInteger('expiration_year');
            $table->unsignedSmallInteger('expiration_month');
            $table->string('card_holder', 64);
            $table->string('first_name', 32);
            $table->string('last_name', 32);
            $table->unsignedMediumInteger('zip_code1');
            $table->unsignedInteger('zip_code2');
            $table->text('address', 512);

            $table->timestamps();

            $table->unique(['card_number', 'card_kind']); // カード番号と種別の組み合わせをユニークに設定
        });

        // カテゴリーテーブル
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('category_name', 256)->unique();
        });

        // 登録商品一覧テーブル
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->default(1); // テーブル名を小文字に修正
            $table->string('name' , 256);
            $table->text('description' , 512);
            $table->integer('price');
            $table->integer('stock');
            $table->string('image_path' , 256)->nullable();
            $table->tinyInteger('product_status')->default(0); // データ型を修正
            $table->timestamps();
        });

        // カート情報テーブル
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->unique(); // テーブル名を小文字に修正
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products'); // テーブル名を小文字に修正
            $table->integer('quantity');
            $table->timestamps();
        });
        
        // 送料テーブル
        Schema::create('m_postage', function (Blueprint $table) {
            $table->id(); 
            $table->integer('postage');
        });
        
        // お届け日数テーブル
        Schema::create('m_delivery_date', function (Blueprint $table) {
            $table->id(); 
            $table->integer('delivery_date');
        });

        // 都道府県テーブル
        Schema::create('m_prefectures', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('postage_id');
            $table->foreign('postage_id')->references('id')->on('m_postage');
            $table->unsignedBigInteger('delivery_date_id');
            $table->foreign('delivery_date_id')->references('id')->on('m_delivery_date');
            $table->string('prefecture' , 16);
        });

        // 注文情報テーブル
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->unique(); // テーブル名を小文字に修正
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('products'); // テーブル名を小文字に修正
            $table->unsignedBigInteger('prefectures_id');
            $table->foreign('prefectures_id')->references('id')->on('m_prefectures'); // テーブル名を小文字に修正
            $table->integer('quantity');
            $table->integer('total_price');
            $table->tinyInteger('order_status')->default(0); // データ型を修正
            $table->timestamps();
        });

        // 消費税テーブル
        Schema::create('consumption_tax', function (Blueprint $table) {
            $table->id(); 
            $table->integer('consumption_tax');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumption_tax');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('m_prefectures');
        Schema::dropIfExists('m_delivery_date');
        Schema::dropIfExists('m_postage');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('users');
    }
};