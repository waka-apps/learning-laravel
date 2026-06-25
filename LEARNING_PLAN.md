# PHP / Laravel Catch-up Plan

作成日: 2026-06-25

## 前提

- 対象者: TypeScript / React / Next.js と Go / Gin の実務経験があるミドルクラスのWebエンジニア
- 目的: 入社前に PHP と Laravel の実務投入に必要な勘所を掴む
- 関心: 物流ドメイン、DDD、ドメインモデリング
- 方針: 言語仕様を暗記するより、Laravelの標準的な書き方で小さな業務アプリを作りながら覚える

## ゴール

4週間で、既存Laravelコードベースに入って以下ができる状態を目指す。

- PHPの型、配列、クラス、名前空間、例外、Composerの基本を読める
- Laravelのリクエスト処理、ルーティング、Controller、Form Request、Service Containerを説明できる
- Migration、Factory、Seeder、Eloquent、Query Builderを使ってDB中心の機能を実装できる
- Feature Test / Unit Testを書き、既存のテスト方針に合わせて変更できる
- Queue、Job、Event、Notification、Scheduleの使い所を判断できる
- LaravelのActive Record寄りの設計とDDD寄りの設計の折り合いをつけられる

## 学習の軸

### 1. PHPを「読める」状態にする

重点:

- `declare(strict_types=1);`
- scalar / nullable / union / intersection / readonly / enum
- 配列と連想配列
- `namespace` / `use`
- Composer、autoload、PSR-4
- 例外、DateTimeImmutable、Carbon
- PHPStan / Pint / PHPUnit or Pest

TS / Go経験者向けの注意:

- PHPの配列は list / map / object-like data の役割が混ざりやすい
- Laravelでは型安全性より規約とテストで守る領域が多い
- Eloquent Modelは永続化モデルであり、純粋なドメインエンティティとは限らない

### 2. Laravelのリクエスト処理を掴む

重点:

- `routes/web.php` と `routes/api.php`
- Controller
- Form Request validation
- Middleware
- Service Container / dependency injection
- Config / env
- Authentication / Authorization の入口

成果物:

- 荷物追跡APIのCRUD
- 入力バリデーション
- API Resourceでレスポンス整形
- Feature Test

### 3. DBとEloquentを重点的にやる

重点:

- Migration
- Factory / Seeder
- Eloquent Model
- Relationship
- Scope
- Casts
- Accessor / Mutator
- N+1問題と eager loading
- Transaction

成果物:

- `shipments`
- `shipment_events`
- `warehouses`
- `carriers`
- `delivery_routes`

題材:

- 出荷は複数の配送イベントを持つ
- 配送イベントには `accepted`, `in_transit`, `arrived_at_hub`, `out_for_delivery`, `delivered`, `failed` がある
- 出荷の現在ステータスは最新イベントから導出する
- 遅延判定は納品予定日時と現在イベントから判断する

### 4. Laravelらしいアプリケーション設計を知る

重点:

- Fat Controllerを避ける
- Form Request / Action / Service / Job の分担
- Policyで認可を外出しする
- Event / Listenerで副作用を分離する
- Queueで外部連携や重い処理を逃がす

DDDとの折り合い:

- Eloquentをそのままドメインモデルにすると速いが、複雑な業務ルールは散らばりやすい
- 最初は `app/Actions` や `app/Services` にユースケースを寄せる
- 集約・値オブジェクト・ドメインサービスは、複雑さが出た場所から局所的に導入する
- RepositoryはLaravelでは過剰になりがち。DB差し替え目的ではなく、複雑な問い合わせや永続化境界を明確にしたい時に限定する

### 5. 実務寄りの周辺機能を触る

重点:

- Queue / Job
- Schedule
- Notification / Mail
- File Storage
- Cache / Redis
- Logging
- Error handling
- Deployment時の config cache / route cache

成果物:

- 配送ステータス更新CSVを取り込むJob
- 遅延出荷を検知するSchedule
- 遅延通知をNotificationとして実装
- 取り込み失敗時のログとリトライ

## 4週間プラン

### Week 1: PHPとLaravelの入口

やること:

- PHPの基本構文をGo/TSとの差分で押さえる
- Composerとautoloadを理解する
- Laravelプロジェクトを作る
- ルーティング、Controller、Request、Responseを触る
- Feature Testを1本書く

完了条件:

- GET / POST / PATCH / DELETE のAPIを自分で追加できる
- `php artisan` の基本コマンドを使える
- バリデーション失敗時のレスポンスをテストできる

### Week 2: EloquentとDB

やること:

- Migrationで物流ドメインのテーブルを作る
- ModelとRelationshipを定義する
- Factory / Seederでテストデータを作る
- N+1を意図的に起こして、eager loadingで直す

完了条件:

- 複数テーブルをまたぐ一覧APIを作れる
- Relationshipの向きと外部キーを説明できる
- DBテストで主要なCRUDを保護できる

### Week 3: 業務ロジックとDDD寄り設計

やること:

- 出荷ステータス更新のユースケースを実装する
- 値オブジェクト候補を見つける
- Policyで認可を分離する
- Event / Listenerで配送完了時の副作用を分ける

完了条件:

- Controllerから業務ロジックを追い出せる
- Eloquent Modelに置く処理とAction/Serviceに置く処理を判断できる
- ドメインルールをテストで表現できる

### Week 4: 非同期処理・運用目線・総仕上げ

やること:

- CSV取り込みJobを作る
- Queue workerを動かす
- Scheduleで遅延検知する
- ログ、リトライ、失敗時の扱いを入れる
- READMEに設計メモを書く

完了条件:

- Queue / Scheduleを使う理由を説明できる
- 失敗する外部入力をテストできる
- 小さな物流アプリとして一通りデモできる

## 日々の進め方

1日60〜90分を想定。

- 10分: 前回の復習、今日のゴールを1つ決める
- 40〜60分: 実装
- 10〜20分: テスト、リファクタ、学びのメモ

毎回残すメモ:

- 今日触ったLaravel機能
- Go / TS と比べて違和感があった点
- 実務で事故りそうな点
- DDD的にどこがドメイン知識だったか

## Codexでのサポート方針

このワークスペースでは、以下の形で学習を進める。

- 小さな課題を出す
- 実装してもらったコードをレビューする
- Laravelの慣用的な書き方に直す
- Go / TS との比較で説明する
- 物流ドメインのモデリングを一緒に詰める
- テスト観点を追加する
- 必要に応じて公式ドキュメントの該当箇所に戻る

おすすめの依頼例:

- `Week 1 Day 1の課題を出して`
- `このPHPコードをレビューして`
- `Laravelらしい書き方に直して`
- `EloquentのrelationshipをGoの構造体設計と比較して説明して`
- `この物流ドメインをDDD観点でモデリングして`
- `次に書くべきテストを考えて`

## 参照する公式ドキュメント

- Laravel installation: https://laravel.com/docs/13.x/installation
- Laravel request lifecycle: https://laravel.com/docs/13.x/lifecycle
- Laravel service container: https://laravel.com/docs/13.x/container
- Laravel Eloquent: https://laravel.com/docs/13.x/eloquent
- Laravel relationships: https://laravel.com/docs/13.x/eloquent-relationships
- Laravel queues: https://laravel.com/docs/13.x/queues
- Laravel testing: https://laravel.com/docs/13.x/testing
- PHP supported versions: https://www.php.net/supported-versions.php
