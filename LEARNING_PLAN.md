# PHP / Laravel Learning Plan

作成日: 2026-06-25

## 最重要の共通理解

この学習の最優先目的は、Laravelを急いで触ることではなく、まずPHPを理解すること。

学習者はTypeScript / React / Next.js と Go / Gin の実務経験があるが、PHPについては初学者として扱う。したがって、PHPの構文、実行方法、型、関数、クラス、配列、例外、Composerを理解する前に、LaravelのController、Eloquent、Service Containerなどへ進まない。

LaravelはPHPの上にあるフレームワークなので、PHPの基本が曖昧なままLaravelへ入ると、以下の区別ができなくなる。

- PHP言語そのものの仕様
- Composerやautoloadの仕組み
- Laravelの規約
- EloquentなどLaravel固有の抽象
- プロジェクト固有の設計判断

この区別をできるようにすることを、最初のゴールにする。

## 学習モードのルール

Codexは、以下のルールで学習をサポートする。

- 未説明の構文やキーワードを、課題の前提にしない
- 新しい概念を出すときは、まず「何か」「なぜ必要か」「Go / TypeScriptで近いものは何か」を説明する
- 1回の課題で新しく扱う概念は少数に絞る
- 実装量より、実行結果を観察して理解することを優先する
- Laravelへ進む前に、PHPとして読める・書ける状態を作る
- 物流ドメインやDDDは、PHP基礎が見えてから題材として使う
- 理解確認では `どう読むか` のような曖昧な聞き方を避け、`何を意味するか` `この宣言から何が分かるか` `この型注釈は何を表すか` の形で確認する
- 新しい課題を出す前に、既存のファイル、class、function、namespace、autoload設定を確認し、再利用できる資産を優先する
- context compaction や新規チャット再開の後でも、既存資産を無視して作り直すのではなく、現在のリポジトリ状態を起点に課題を設計する

各レッスンは次の形で進める。

1. 今日のゴール
2. 新しい概念の説明
3. 小さなコード例
4. 実行して観察すること
5. 自分で少し変える課題
6. レビュー観点
7. 次へ進む条件

理解確認の補助ルール:

- `どう読むか` は質問意図が曖昧になりやすいので、原則として使わない
- 確認したい対象が「意味」「意図」「型情報」「使い分け」のどれかを明示して聞く
- 学習者の回答がズレた時は、質問文側の曖昧さが原因かも先に点検する

既存資産活用の補助ルール:

- まず `hello.php`, `src/`, `composer.json`, `vendor/autoload.php`, `notes/`, `PROGRESS.md` を見て、今ある学習資産を把握する
- 既存の class や関数で目的を満たせるなら、同じ概念の作り直しを避ける
- 課題の主目的と直接関係しない作り直しは入れない
- 既存資産を拡張する課題と、新しく最小例を作る課題は意図的に分ける
- 既存資産を使わずに新規作成へ切り替える場合は、その理由を先に説明する

## 新規チャットでの再開手順

新しいチャットから再開する場合、Codexは最初に以下を確認する。

1. `LEARNING_PLAN.md` を読む
2. `PROGRESS.md` を読む
3. `notes/` 配下の現在フェーズの最新ジャーナルを読む
4. `hello.php`, `src/`, `composer.json` を見て、現在の学習資産を確認する
5. `git status -sb` で未コミット変更を確認する
6. `PROGRESS.md` の「現在地」に従って次のレッスンを始める

再開時の判断:

- `PROGRESS.md` の現在地を最優先する
- `LEARNING_PLAN.md` は全体方針と次フェーズ設計の参照元とする
- `notes/` は直近の理解・未解消点を確認するために使う
- フェーズごとのジャーナルを優先して読む
- 現在の repo にある class / function / file を再利用できるかを先に判断する
- 状態を更新したら必ずコミットする
- ジャーナル用コミットには、そのDayまたはレッスンで触ったPHPファイルや関連ファイルも一緒に含める

この手順に従えば、新規チャットでも同じ学習方針で再開できる。

## 全体ゴール

最終的には、次の職場のLaravelコードベースに入って、既存コードを読み、軽微な機能追加や修正を自力で進められる状態を目指す。

具体的には以下を目標にする。

- PHPファイルを実行し、エラーを読める
- PHPの変数、型、配列、関数、クラス、enum、例外を説明できる
- Composer、autoload、namespaceの意味を理解できる
- Laravelのリクエスト処理の流れを説明できる
- Controller、Form Request、Model、Migration、Factory、Testを使える
- Eloquentの便利さと危険な点を理解できる
- LaravelのActive Record寄りの設計とDDD寄りの設計の違いを説明できる

## 2026-06-27時点の見直し

Week 1で、PHPの本当に基本的な構文をCLIで観察した。到達点は以下。

- PHPファイルをCLI実行できる
- `echo`, `var_dump`, `gettype` で観察できる
- 暗黙の型変換と `strict_types` の入口を説明できる
- `if`, `match`, `foreach` を読める
- list と連想配列の違いを説明できる
- 関数へ処理を分けられる
- class, property, constructor, method の入口を理解した

一方で、Laravelへ進むにはPHP知識がまだ薄い。特に、Laravelのコードを読む前に以下を固める必要がある。

- visibility: `public`, `private`, `protected`
- constructor property promotion
- `readonly`
- enum
- exception
- namespace / `use`
- Composer / autoload / PSR-4
- PHPDoc と配列の型表現
- static analysis の考え方
- DateTime / Carbon の入口

したがって、次はLaravelへ直接入らず、`Laravel前のPHP最小セット` を1フェーズ挟む。

## 次の推奨プラン

### Phase 2: Laravel前のPHP最小セット

目的:

LaravelのController、Request、Model、Service、Jobを読んだときに、PHP構文で止まらない状態を作る。

扱うこと:

- visibility
- constructor property promotion
- `readonly`
- enum
- exception
- namespace / `use`
- Composer / autoload
- PHPDoc
- DateTimeImmutable と Carbon の入口

完了条件:

- `private` property と public method の関係を説明できる
- enumで状態を表現できる
- 例外を投げる場面と `null` を返す場面を区別できる
- 複数ファイルに分けたPHPコードをautoloadで実行できる
- Laravelのクラスファイルを見て、namespaceとuseで迷わない

### Phase 2のレッスン案

#### P2-01: visibility とカプセル化

- `public` property を直接触る危うさ
- `private` property
- getter method
- 状態変更用 method

#### P2-02: constructor property promotion と readonly

- 長い constructor の省略形
- object生成後に変えない値
- tracking number のような識別子をどう扱うか

#### P2-03: enum

- 文字列statusの危うさ
- `ShipmentStatus` enum
- `match` と enum の組み合わせ

#### P2-04: exception と null

- `null` を返す関数
- `throw new RuntimeException(...)`
- 見つからない、壊れている、許可されない、の違い

#### P2-05: 複数ファイル化

- `require`
- ファイル分割
- classごとにファイルを分ける
- 手動読み込みの限界

#### P2-06: Composer と autoload

- `composer.json`
- PSR-4
- `vendor/autoload.php`
- namespace / `use`

#### P2-07: PHPDoc と配列型

- `Shipment[]`
- `array<string, mixed>`
- array shape
- 静的解析がなぜ必要になるか

#### P2-08: 日時

- `DateTimeImmutable`
- Carbonの入口
- ETAやdeliveredAtの表現

#### P2-09: 小さな復習課題

- 複数ファイル
- enum
- private property
- readonly
- exception
- autoload

### Phase 3: Laravel入口

Phase 2完了後にLaravelへ入る。

扱うこと:

- Laravelプロジェクト作成
- `php artisan`
- routing
- request lifecycle
- Controller
- Request / Response
- config / env
- service containerの入口

完了条件:

- RouteからControllerが呼ばれる流れを説明できる
- PHPの仕組みとLaravelの規約を分けて説明できる
- JSON APIを1つ作れる

### Phase 4: Laravel DB / Eloquent

扱うこと:

- Migration
- Eloquent Model
- Factory / Seeder
- Relationship
- N+1
- transaction

### Phase 5: Laravel testing / quality

扱うこと:

- PHPUnit or Pest
- Feature Test
- Unit Test
- Pint
- PHPStan or Larastan

### Phase 6: Laravel設計と物流ドメイン

扱うこと:

- Form Request
- Action / Service
- Policy
- Event / Listener
- Job / Queue
- Schedule
- Eloquent Modelとドメインモデルの違い

判断:

Laravelに早く入ることより、Laravelコードを読んだときにPHP構文・autoload・namespace・例外・型で止まらないことを優先する。現時点では、Phase 2を挟むのが最も効率が良い。

## フェーズ構成

### Phase 1: PHPを実行して観察する

目的:

PHPのファイルを実行し、基本文法と型の挙動を体で掴む。

扱うこと:

- `<?php`
- `php file.php`
- コメント
- 変数
- 文字列
- 数値
- 真偽値
- `echo`
- `var_dump`
- `gettype`
- 暗黙の型変換
- `declare(strict_types=1);`

この段階では、クラス、namespace、Composer、Laravelは扱わない。

完了条件:

- PHPファイルを作ってCLIで実行できる
- `var_dump` を使って値と型を確認できる
- PHPが暗黙に型変換する場面を説明できる
- `strict_types` が必要になる理由を説明できる

### Phase 2: 関数と配列

目的:

PHPで小さな処理を関数に分け、配列を扱えるようにする。

扱うこと:

- 関数定義
- 引数の型
- 戻り値の型
- nullable型
- 配列
- 連想配列
- `foreach`
- `array_map`, `array_filter` などの基本
- PHPDocによる配列要素型の補足

TypeScript / Go経験者向けの注意:

- PHPの配列は、list、map、object-like dataの役割が混ざる
- 配列の形は型だけでは表現しきれないことが多い
- PHPDocや静的解析で補う文化がある

完了条件:

- 配列の一覧をループして集計できる
- 関数の引数と戻り値に型を書ける
- 連想配列の便利さと危うさを説明できる

### Phase 3: クラスとオブジェクト

目的:

Laravelへ進む前に、PHPのクラス構文を理解する。

扱うこと:

- `class`
- constructor
- property
- method
- visibility: `public`, `private`, `protected`
- `readonly`
- `DateTimeImmutable`
- 例外
- enum

この段階から、物流ドメインの題材を少し使う。

題材:

- Shipment
- ShipmentEvent
- ShipmentStatus

完了条件:

- Goのstruct + methodとPHP classの違いを説明できる
- TypeScript classとの近さと違いを説明できる
- enumで状態を表現できる
- mutableな日時とimmutableな日時の違いを説明できる

### Phase 4: Composerとautoload

目的:

複数ファイルのPHPアプリケーションを、実務的な形で読み書きできるようにする。

扱うこと:

- Composer
- `composer.json`
- dependency
- autoload
- PSR-4
- namespace
- `use`
- dev dependency
- script

完了条件:

- `require` の手動読み込みとautoloadの違いを説明できる
- namespaceがファイルパスとどう対応するか説明できる
- Composerで依存ライブラリを入れる意味を説明できる

### Phase 5: テストと品質ツール

目的:

PHPコードを安全に変えられる状態を作る。

扱うこと:

- PHPUnit or Pest
- assertion
- arrange / act / assert
- PHPStan
- Laravel Pint
- 静的解析とフォーマットの役割

完了条件:

- 小さな関数やクラスにテストを書ける
- テスト失敗のメッセージを読める
- 型エラーとテスト失敗の違いを説明できる

### Phase 6: Laravelの入口

目的:

PHPの基礎を踏まえて、Laravelの規約を理解する。

扱うこと:

- Laravelプロジェクト作成
- `php artisan`
- routing
- request lifecycle
- Controller
- Request / Response
- config / env
- service containerの入口

完了条件:

- ブラウザまたはHTTPクライアントからLaravelのRouteを呼べる
- Controllerが呼ばれる流れを説明できる
- PHPの仕組みとLaravelの仕組みを分けて説明できる

### Phase 7: LaravelでDBを扱う

目的:

Laravel実務で頻出するDB中心の実装を学ぶ。

扱うこと:

- Migration
- Model
- Eloquent
- Query Builder
- Factory
- Seeder
- Relationship
- N+1
- transaction

物流題材:

- shipments
- shipment_events
- carriers
- warehouses

完了条件:

- Migrationでテーブルを作れる
- Eloquent ModelでCRUDできる
- relationshipを使って関連データを取得できる
- N+1問題を説明できる

### Phase 8: Laravelと設計

目的:

Laravelらしい実装とDDD寄りの設計の折り合いを理解する。

扱うこと:

- Fat Controllerを避ける
- Form Request
- Action / Service
- Policy
- Event / Listener
- Job / Queue
- Schedule
- Notification
- Eloquent Modelとドメインモデルの違い

DDDとの関係:

- EloquentはActive Recordであり、永続化と振る舞いが近い
- 小さい機能ではEloquent中心が実務的に速い
- 複雑な業務ルールはAction、Service、Value Objectへ逃がす余地がある
- Repositoryは常に必要ではない
- 境界を増やす前に、どのルールを守りたいのかを明確にする

完了条件:

- Controller、Model、Action、Jobの責務を説明できる
- 物流ドメインのルールをテストで表現できる
- DDD用語をLaravelコードへ機械的に当てはめない判断ができる

## 最初の7日間

### Day 1: PHPを実行する、値と型を見る

ゴール:

- `php hello.php` を実行できる
- `echo`, `var_dump`, `gettype` を使える
- PHPの変数が `$name` の形だと理解する
- 暗黙の型変換を観察する

扱わないこと:

- class
- enum
- Composer
- Laravel
- DDD

### Day 2: `strict_types` と関数

ゴール:

- 関数を定義できる
- 引数型と戻り値型を書ける
- `declare(strict_types=1);` の意味を説明できる
- TypeErrorを読める

### Day 3: 条件分岐とループ

ゴール:

- `if`
- `match`
- `for`
- `foreach`
- 真偽値の扱い
- 比較演算子

### Day 4: 配列と連想配列

ゴール:

- listとしての配列
- mapとしての配列
- 連想配列
- 配列の形が崩れる危険性
- PHPDocで配列要素を補足する理由

### Day 5: 関数に分ける

ゴール:

- 小さな処理を関数へ分ける
- nullable型を使う
- 例外を軽く見る
- テストしやすい形を意識する

### Day 6: クラスの入口

ゴール:

- class
- property
- constructor
- method
- visibility

### Day 7: 小さな復習課題

ゴール:

- 1週間分の構文を使って小さなCLIプログラムを書く
- 物流ドメインはまだ軽く扱う
- レビューを受けて、PHPとして読みやすい形に直す

## Day 1の正しい課題

`hello.php` に、まず以下のような小さなコードを書く。

```php
<?php

$name = 'Wakabayashi';
$years = 10;

echo "Hello, {$name}\n";
echo "Experience: {$years} years\n";

var_dump($name);
var_dump($years);
var_dump($years + '5');
var_dump(gettype($years));
```

実行する。

```bash
php hello.php
```

観察すること:

- `echo` は何を出力するか
- `var_dump` は値と型をどう表示するか
- `$years + '5'` がなぜ計算できるのか
- `gettype($years)` は何を返すか

この時点では `declare(strict_types=1);` は書かない。まずPHPのデフォルト挙動を観察する。

## 学習ログの残し方

各回、短くてよいので `notes/` にメモを残す。以後、このメモを学習ジャーナルとして扱う。

例:

```text
notes/
  phase-1/
    day-01.md
    day-02.md
  phase-2/
    p2-01.md
```

書くこと:

- 今日わかったこと
- まだ曖昧なこと
- Go / TypeScriptと違うと感じたこと
- 次に確認したいこと

運用:

- 各Dayの区切りで、必ずジャーナルを1件残す
- ジャーナルは進捗更新とは別に、学習内容の記録として残す
- 進捗の状態更新と同様に、ジャーナル追加後はコミットする
- ジャーナル用のコミットには、そのDayで触った学習用コードや関連ファイルも一緒に含める
- ジャーナルは `notes/phase-x/` のようにフェーズごとに分ける
- Phase 1 は `day-xx.md`、Phase 2 以降は `p2-01.md` のようにフェーズ名に沿って命名する

## 参照する公式ドキュメント

- PHP manual: https://www.php.net/manual/en/
- PHP types: https://www.php.net/manual/en/language.types.php
- PHP functions: https://www.php.net/manual/en/language.functions.php
- PHP classes and objects: https://www.php.net/manual/en/language.oop5.php
- PHP supported versions: https://www.php.net/supported-versions.php
- Composer documentation: https://getcomposer.org/doc/
- Laravel installation: https://laravel.com/docs/13.x/installation
- Laravel request lifecycle: https://laravel.com/docs/13.x/lifecycle
- Laravel service container: https://laravel.com/docs/13.x/container
- Laravel Eloquent: https://laravel.com/docs/13.x/eloquent
- Laravel testing: https://laravel.com/docs/13.x/testing
