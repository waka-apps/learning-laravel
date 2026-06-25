# Day 01 Journal

Date: 2026-06-25
Phase: Phase 1
Day: Day 1 - PHPを実行する、値と型を見る

## Today I learned

- `php hello.php` でPHPファイルをCLI実行できる
- `echo` は表示用、`var_dump` は値と型を調べる用途で使う
- `gettype($years)` は型名を文字列で返す
- `'5'` は文字列だが、`+` のような算術演算ではPHPが数値に暗黙変換して計算する

## Still unclear

- `declare` が何で、どのタイミングで必要になるのか
- PHPの型チェックがどこまで厳密で、どこで自動変換されるのか

## Differences from Go / TypeScript

- GoやTypeScriptより、PHPは自動変換が強く入る
- 調査のために `var_dump` を気軽に使う文化が見えやすい

## Next questions

- `declare(strict_types=1);` は何を変えるのか
- 関数の引数型と戻り値型は、実行時にどう扱われるのか
