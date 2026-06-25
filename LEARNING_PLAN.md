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

各レッスンは次の形で進める。

1. 今日のゴール
2. 新しい概念の説明
3. 小さなコード例
4. 実行して観察すること
5. 自分で少し変える課題
6. レビュー観点
7. 次へ進む条件

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
  day-01.md
  day-02.md
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
