# Day 02 Journal

Date: 2026-06-26
Phase: Phase 1
Day: Day 2 - `strict_types` と関数

## Today I learned

- `function add(int $a, int $b): int` のように、引数型と戻り値型を書ける
- `declare` はファイルの振る舞いに関する設定を書く構文
- `declare(strict_types=1);` を使うと、関数呼び出し時のスカラー型チェックが厳しくなる
- `strict_types` がない場合は、`add('1', '2')` のような呼び出しでもPHPが自動変換して通すことがある
- `strict_types` がある場合は、自動変換せず `TypeError` になる

## Still unclear

- `strict_types` が影響する範囲の細かい仕様
- return type と parameter type の違いをどう意識すると良いか

## Differences from Go / TypeScript

- PHPでは、型宣言があってもデフォルトではゆるい変換が入る
- エラーメッセージには、定義場所と呼び出し場所の両方が出る

## Next questions

- `if` と `match` はどう使い分けるのか
- PHPの真偽値判定はどこまで緩いのか
