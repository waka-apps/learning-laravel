# Learning Progress

作成日: 2026-06-25

## 現在地

- 現在のフェーズ: Phase 3 - Laravelの入口
- 現在のレッスン: P3-05 - Closure Route から Controller Route へ
- 状態: in progress
- 次にやること: Controller を作り、Closure Route を Controller Route に置き換える

## 進め方

各レッスンの状態は、次のいずれかで管理する。

- not started: まだ着手していない
- in progress: 説明または実装を進めている
- review: 学習者が実装し、Codexがレビューする状態
- done: 完了条件を満たした
- revisit: 理解が曖昧なので後で戻る

## 運用ルール

- 状態を更新したら、その更新を必ずコミットする
- 進捗の変更、完了判定、保留判定は、記録とコミットをセットで扱う
- 学習内容の実装と進捗管理の変更は、必要なら別コミットに分ける
- 各Dayまたは各レッスンの学びは `notes/phase-x/` 配下にジャーナルとして残す
- ジャーナルを追加したら、その追加も必ずコミットする
- ジャーナル用のコミットには、そのDayで触ったPHPファイルや関連ファイルも一緒に含める

## Phase進捗

| Phase | 内容 | 状態 |
| --- | --- | --- |
| Phase 1 | PHPを実行して観察する | done |
| Phase 2 | Laravel前のPHP最小セット | done |
| Phase 3 | Laravelの入口 | in progress |
| Phase 4 | Laravel DB / Eloquent | not started |
| Phase 5 | Laravel testing / quality | not started |
| Phase 6 | Laravel設計と物流ドメイン | not started |

## 最初の7日間

| Day | ゴール | 状態 | 完了日 |
| --- | --- | --- | --- |
| Day 1 | PHPを実行する、値と型を見る | done | 2026-06-25 |
| Day 2 | `strict_types` と関数 | done | 2026-06-26 |
| Day 3 | 条件分岐とループ | done | 2026-06-26 |
| Day 4 | 配列と連想配列 | done | 2026-06-26 |
| Day 5 | 関数に分ける | done | 2026-06-26 |
| Day 6 | クラスの入口 | done | 2026-06-27 |
| Day 7 | 小さな復習課題 | done | 2026-06-27 |

## Day 1チェックリスト

- [x] `hello.php` を編集した
- [x] `php hello.php` を実行した
- [x] `echo` の出力を確認した
- [x] `var_dump` が値と型を表示することを確認した
- [x] `gettype` が型名を返すことを確認した
- [x] `$years + '5'` の結果を確認した
- [x] PHPが暗黙に型変換する場面を説明できる
- [x] `declare(strict_types=1);` はまだ書かない理由を説明できる

## Day 2チェックリスト

- [x] `declare` がファイルの振る舞いを指定する構文だと説明できる
- [x] 関数を定義して呼び出せる
- [x] 引数型と戻り値型を書ける
- [x] `strict_types` なしでの挙動を確認した
- [x] `strict_types` ありでの挙動を確認した
- [x] `TypeError` を読める

## Day 3チェックリスト

- [x] `if` を使って条件分岐できる
- [x] `match` を使って値ごとの分岐を書ける
- [x] `foreach` で配列をループできる
- [x] PHPの真偽値判定が緩い場面を1つ説明できる
- [x] `if` と `match` の使い分けを説明できる

## Day 4チェックリスト

- [x] listとしての配列を書ける
- [x] 連想配列を書ける
- [x] 添字アクセスとキーアクセスの違いを説明できる
- [x] PHPの配列が list と map の両方に使われると説明できる
- [x] 配列の形が崩れると危険な理由を1つ説明できる

## Day 5チェックリスト

- [x] 小さな処理を関数に分けられる
- [x] 関数名で処理の意図を表現できる
- [x] 引数と戻り値の役割を説明できる
- [x] `null` を返す関数を読める
- [x] 関数に分けると何が良いかを1つ説明できる

## Day 6チェックリスト

- [x] `class` を定義できる
- [x] property が何か説明できる
- [x] constructor が何をするか説明できる
- [x] method が何か説明できる
- [x] 関数とクラスの使い分けを1つ説明できる

## Day 7チェックリスト

- [x] class を使って小さなモデルを書ける
- [x] 配列をループして処理できる
- [x] 関数または method に責務を分けられる
- [x] `match` または `if` を適切に使える
- [x] これまでの内容を組み合わせて1つの小さなCLIプログラムにできる

## Phase 2チェックリスト

- [x] visibility とカプセル化を説明できる
- [x] constructor property promotion を読める
- [x] `readonly` を使う場面を説明できる
- [x] enumでstatusを表現できる
- [x] exception と `null` の使い分けを説明できる
- [x] namespace / `use` を読める
- [x] Composer autoloadで複数ファイルを実行できる
- [x] PHPDocで配列要素型を補足できる
- [x] DateTimeImmutable または Carbon の入口を理解できる

## P2-01チェックリスト

- [x] `public` property を外から触れることを確認した
- [x] `private` property を外から直接触れないことを確認した
- [x] getter method の役割を説明できる
- [x] 状態変更methodで更新する利点を説明できる
- [x] カプセル化が必要な理由を1つ説明できる

## P2-02チェックリスト

- [x] constructor property promotion を読める
- [x] promotion で何が省略されるか説明できる
- [x] `readonly` property の意味を説明できる
- [x] `readonly` を変更しようとした時のエラーを確認した
- [x] tracking number のような識別子に `readonly` が向く理由を説明できる

## P2-03チェックリスト

- [x] enum を定義できる
- [x] `case` で取りうる値を列挙できる
- [x] `string` の status より enum の方が安全な理由を説明できる
- [x] class の property 型として enum を使える
- [x] enum を `match` と組み合わせて読める

## P2-04チェックリスト

- [x] `?Shipment` の意味を説明できる
- [x] 見つからない時に `null` を返す関数を書ける
- [x] `throw new Exception(...)` を読める
- [x] 見つからないことが「普通」か「異常」かで `null` と exception を使い分けられる
- [x] `try` / `catch` の基本形を読める

## P2-05チェックリスト

- [x] `namespace App\\Domain\\Shipment;` を読める
- [x] `use App\\Domain\\Shipment\\Shipment;` を読める
- [x] class を別ファイルに分けても使えることを確認した
- [x] `namespace` は名前の衝突を避ける仕組みだと説明できる
- [x] `use` は完全修飾名を短く書くための import だと説明できる

## P2-06チェックリスト

- [x] Composer が何のツールか説明できる
- [x] `composer.json` を `package.json` / `go.mod` に近いものとして説明できる
- [x] autoload の役割を説明できる
- [x] `require_once` なしで class を使える流れを説明できる
- [x] `vendor/autoload.php` の意味を説明できる

## P2-07チェックリスト

- [x] PHPDoc が何のためにあるか説明できる
- [x] `@param list<Shipment> $shipments` を読める
- [x] `array` だけでは不足する情報を説明できる
- [x] function の上に最小の PHPDoc を書ける
- [x] PHP の型宣言と PHPDoc の役割の違いを説明できる

## P2-08チェックリスト

- [x] `DateTimeImmutable` が immutable な日時オブジェクトだと説明できる
- [x] `DateTime` が mutable であることを実行結果で確認した
- [x] `modify()` の結果が元オブジェクトを変更するかどうかを比較できる
- [x] ドメイン上の事実日時に immutable が向く理由を説明できる
- [x] 関数の引数と戻り値で `DateTimeImmutable` を扱える

## P2-09チェックリスト

- [x] enum を property 型として使える
- [x] `readonly` な識別子を持つ class を書ける
- [x] `private` property を method 経由で更新できる
- [x] `DateTimeImmutable` を property または引数で扱える
- [x] `null` を返す関数と exception を投げる関数を使い分けられる

## Phase 3チェックリスト

- [x] Laravel project の基本ディレクトリ構造を説明できる
- [x] `routes/web.php` と `bootstrap/app.php` の役割を説明できる
- [x] Route から Controller が呼ばれる流れを説明できる
- [x] `php artisan` が何のためのコマンドか説明できる
- [x] 最小の JSON response を返す Route または Controller を作れる

## P3-01チェックリスト

- [x] `app` directory に何が入るか説明できる
- [x] `routes` directory に何が入るか説明できる
- [x] `bootstrap/app.php` が Route 読み込み設定を持つと説明できる
- [x] `routes/web.php` の Route 定義例を読める
- [x] Closure Route と Controller Route の違いを説明できる

## P3-02チェックリスト

- [x] `php artisan` が Laravel 専用 CLI だと説明できる
- [x] `php artisan list` と `php artisan help migrate` の役割を説明できる
- [x] `php artisan migrate` が何をするコマンドか説明できる
- [x] `laravel new` と `composer run dev` の位置づけを説明できる
- [x] Laravel project 作成直後に最初に見るファイルを 2 つ挙げられる

## P3-03チェックリスト

- [x] 既存 repo を壊さずに Laravel project 用の subdirectory を作れる
- [x] Laravel project を作成できる
- [x] `composer run dev` または同等コマンドで起動できる
- [x] `routes/web.php` を開いてデフォルト route を確認できる
- [x] `php artisan route:list` の結果を確認できる

## P3-04チェックリスト

- [x] `routes/web.php` の Closure Route を編集できる
- [x] `view('welcome')` を配列 return に置き換えられる
- [x] ブラウザまたは curl で JSON response を確認できる
- [x] HTML response と JSON response の違いを説明できる

## P3-05チェックリスト

- [ ] `php artisan make:controller` が何を生成するか確認できる
- [ ] Controller class に method を追加できる
- [ ] `routes/web.php` を Controller Route に書き換えられる
- [ ] Closure Route と Controller Route のコード上の違いを説明できる
- [ ] `GET /` が引き続き JSON response を返すことを確認できる

## 理解チェック

Day 1完了時に、自分の言葉で答えられるようにする。

- `<?php` は何を表すか
- PHPの変数名になぜ `$` が付くか
- `echo` と `var_dump` は何が違うか
- `gettype` は何に使えるか
- なぜ文字列 `'5'` と数値 `10` を足せるのか
- その挙動はGo / TypeScriptと比べて何が危険か

## セッションログ

### 2026-06-25

- 初回の学習計画を作成した
- その後、最優先目的を「LaravelではなくPHP理解」に修正した
- `LEARNING_PLAN.md` を学習モード前提に更新した
- `PROGRESS.md` を追加し、現在地とチェックリストを管理することにした
- Phase 1 を開始した
- Day 1 を `in progress` に切り替えた
- `hello.php` を実行し、Day 1 の観察結果を確認した
- Day 1 を `review` に切り替えた
- 学習ジャーナルを残す運用を追加した
- Day 1 を `done` に切り替えた
- Day 2 を `in progress` に切り替えた
- ジャーナル用コミットには、学習で触ったPHPファイルも含める運用に変更した
- Day 2 の `strict_types` 比較実行を確認した
- Day 2 を `review` に切り替えた
- Day 2 を `done` に切り替えた
- Day 3 を `in progress` に切り替えた
- Day 3 の `if` / `match` / `foreach` 実行を確認した
- Day 3 を `review` に切り替えた
- Day 3 を `done` に切り替えた
- Day 4 を `in progress` に切り替えた
- Day 4 の list / 連想配列 の実行を確認した
- Day 4 を `review` に切り替えた
- Day 4 を `done` に切り替えた
- Day 5 を `in progress` に切り替えた

### 2026-06-29

- P2-07 を完了した
- 質問文の曖昧さを避ける運用を `LEARNING_PLAN.md` に反映した
- P2-08 を `in progress` に切り替えた
- `DateTimeImmutable` を入口に、PHP の日時表現を学ぶ方針にした
- `DateTimeImmutable` と `DateTime` の違いを実行結果から説明できることを確認した
- P2-08 を `review` に切り替えた
- `hello.php` で immutable / mutable の比較関数を書き、P2-08 を完了にした
- 次のレッスンを P2-09 に設定した
- P2-09 を `in progress` に切り替えた
- 課題設計では既存資産を優先して再利用する運用を `LEARNING_PLAN.md` に追記した
- 完了済みの理解確認を再度そのまま聞かないよう、`PROGRESS.md` を再質問防止にも使う運用を `LEARNING_PLAN.md` に追記した
- `Shipment` と `hello.php` を使った Phase 2 の統合課題を実行し、P2-09 を `review` に切り替えた
- `Shipment.php` に `deliveredAt` と `markDelivered(DateTimeImmutable $deliveredAt)` を追加した
- `hello.php` で `findShipment` / `requireShipment` / `markDelivered` / `deliveredAt` を組み合わせて実行確認した
- P2-09 を `done` にし、Phase 2 を完了扱いにした
- Phase 3 を開始し、P3-01 を `in progress` に切り替えた
- Laravel の構造、Route、`bootstrap/app.php` の入口説明を行い、P3-01 を `review` に切り替えた
- 通常 Laravel と Octane での `bootstrap/app.php` の捉え方の違いを整理した
- P3-01 を `done` にし、次のレッスンを P3-02 に設定した
- P3-02 を `in progress` に切り替えた
- `php artisan`、`laravel new`、`composer run dev` の違いを整理し、P3-02 を `review` に切り替えた
- P3-02 を `done` にし、次のレッスンを P3-03 に設定した
- P3-03 を `in progress` に切り替え、Laravel project は `laravel-app/` に作る方針にした
- 実際には `laravel/` に project を作成し、`php artisan route:list` と `php artisan serve` の動作を確認した
- P3-03 を `review` に切り替えた
- `route:list` の `routes/web.php:5` は route 定義のソース位置を示すと整理した
- P3-03 を `done` にし、次のレッスンを P3-04 に設定した
- P3-04 を `in progress` に切り替えた
- `view('welcome')` を配列 return に変更し、JSON response を確認して P3-04 を `review` に切り替えた
- P3-04 を `done` にし、次のレッスンを P3-05 に設定した
- P3-05 を `in progress` に切り替えた
- Day 5 の関数分割コード実行を確認した
- Day 5 を `review` に切り替えた
- Day 5 を `done` に切り替えた
- Day 6 を `in progress` に切り替えた
- Day 6 の class / property / constructor / method 実行を確認した
- Day 6 を `review` に切り替えた
- Day 6 を `done` に切り替えた
- Day 7 を `in progress` に切り替えた
- Day 7 の復習課題実行を確認した
- Day 7 を `done` に切り替えた
- Week 1完了後の見直しを行い、Laravel前にPhase 2としてPHP最小セットを挟む方針に更新した
- Phase 2 を `in progress` に切り替えた
- P2-01 を `in progress` に切り替えた
- P2-01 の `public` / `private` の初回実行を確認した
- P2-01 を `review` に切り替えた
- P2-01 で `private` property への直接アクセスエラーを確認した
- P2-01 を `done` に切り替えた
- P2-02 を `in progress` に切り替えた
- P2-02 の constructor property promotion / readonly の初回実行を確認した
- P2-02 を `review` に切り替えた
- P2-02 で `readonly` property への再代入エラーを確認した
- P2-02 で `readonly` が識別子の不変条件を守る用途に向くと説明できた
- P2-02 を `done` に切り替えた
- P2-03 を `in progress` に切り替えた
- P2-03 で enum を導入し、status を string から enum に置き換えた
- P2-03 を `review` に切り替えた
- P2-03 で enum が不正な文字列を防ぎ、`ShipmentStatus::InTransit` を enum の値として読めると確認した
- P2-03 で enum を `match` と組み合わせ、内部値と表示ラベルを分けて扱えると確認した
- P2-03 で `status()` と `statusLabel()` の役割の違いを説明できた
- P2-03 で enum は想定外の値を入りにくくし、`match` の網羅漏れは実行時エラーで検知できると整理した
- P2-03 を `done` に切り替えた
- P2-04 を `in progress` に切り替えた
- P2-04 で `findShipment()` による `null` 戻りと `requireShipment()` による exception を比較した
- P2-04 を `review` に切り替えた
- P2-04 で `?Shipment` は `Shipment | null` を表す戻り値型だと整理した
- P2-04 で「見つからないのが普通なら null、異常なら exception」と使い分けを説明できた
- P2-04 を `done` に切り替えた
- P2-05 を `in progress` に切り替えた
- P2-05 で Shipment / ShipmentStatus を別ファイルへ分割し、namespace と use を使って実行を維持した
- P2-05 を `review` に切り替えた
- P2-05 で `use` は完全修飾名を短く書く import だと説明できた
- P2-05 で `namespace` は class の所属先を表すと説明できた
- P2-05 で namespace は完全修飾名の衝突を避け、サブドメインごとの名前付けにも役立つと整理した
- P2-05 を `done` に切り替えた
- P2-06 を `in progress` に切り替えた
- P2-06 で `composer.json` に PSR-4 autoload を追加し、`vendor/autoload.php` 経由で実行を維持した
- P2-06 を `review` に切り替えた
- P2-06 で Composer は依存管理と autoload のためのツールだと説明できた
- P2-06 で `composer.json` は依存関係と project 設定を持つファイルだと説明できた
- P2-06 で `vendor/autoload.php` は必要な class を後から解決する loader の入口だと整理した
- P2-06 を `done` に切り替えた
- P2-07 を `in progress` に切り替えた
- P2-07 で `findShipment()` / `requireShipment()` に PHPDoc を追加した
- P2-07 を `review` に切り替えた
- P2-07 で `list<Shipment>` は Shipment インスタンスだけが入る添字配列だと説明できた
- P2-07 で PHPDoc は補足情報、PHP 型宣言は実行時に効くという役割差を整理した
- P2-07 の確認質問が曖昧だったため、今後は「何を意味するか」で確認する方針に改めた
- P2-07 を `done` に切り替えた
- 理解確認の質問文を `どう読むか` から `何を意味するか` / `何が分かるか` へ寄せる運用を `LEARNING_PLAN.md` に反映した

## 保留事項

- GitHubへのpushは、ローカルではなくリモート設定や権限の状態に依存するため、必要になった時点で再確認する
- Laravelプロジェクトの作成は、Phase 6まで行わない
- 物流ドメインとDDDの題材は、PHPの基礎構文を理解してから扱う
