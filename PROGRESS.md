# Learning Progress

作成日: 2026-06-25

## 現在地

- 現在のフェーズ: Phase 1 - PHPを実行して観察する
- 現在のレッスン: Day 2 - `strict_types` と関数
- 状態: in progress
- 次にやること: `declare` と関数の引数型・戻り値型を最小コードで確認する

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
- 各Dayの学びは `notes/day-xx.md` にジャーナルとして残す
- ジャーナルを追加したら、その追加も必ずコミットする

## Phase進捗

| Phase | 内容 | 状態 |
| --- | --- | --- |
| Phase 1 | PHPを実行して観察する | in progress |
| Phase 2 | 関数と配列 | not started |
| Phase 3 | クラスとオブジェクト | not started |
| Phase 4 | Composerとautoload | not started |
| Phase 5 | テストと品質ツール | not started |
| Phase 6 | Laravelの入口 | not started |
| Phase 7 | LaravelでDBを扱う | not started |
| Phase 8 | Laravelと設計 | not started |

## 最初の7日間

| Day | ゴール | 状態 | 完了日 |
| --- | --- | --- | --- |
| Day 1 | PHPを実行する、値と型を見る | done | 2026-06-25 |
| Day 2 | `strict_types` と関数 | in progress | - |
| Day 3 | 条件分岐とループ | not started | - |
| Day 4 | 配列と連想配列 | not started | - |
| Day 5 | 関数に分ける | not started | - |
| Day 6 | クラスの入口 | not started | - |
| Day 7 | 小さな復習課題 | not started | - |

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

- [ ] `declare` がファイルの振る舞いを指定する構文だと説明できる
- [ ] 関数を定義して呼び出せる
- [ ] 引数型と戻り値型を書ける
- [ ] `strict_types` なしでの挙動を確認した
- [ ] `strict_types` ありでの挙動を確認した
- [ ] `TypeError` を読める

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

## 保留事項

- GitHubへのpushは、ローカルではなくリモート設定や権限の状態に依存するため、必要になった時点で再確認する
- Laravelプロジェクトの作成は、Phase 6まで行わない
- 物流ドメインとDDDの題材は、PHPの基礎構文を理解してから扱う
