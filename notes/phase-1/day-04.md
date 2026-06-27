# Day 04 Journal

Date: 2026-06-26
Phase: Phase 1
Day: Day 4 - 配列と連想配列

## Today I learned

- PHPの `array` は、list と連想配列の両方に使われる
- list 的な配列は `0`, `1`, `2` のような整数キーでアクセスする
- 連想配列は `'status'`, `'carrier'` のような名前付きキーでアクセスする
- 添字アクセスとキーアクセスは、どちらも同じ `array` に対する取り出し方の違い
- 存在しないキーを読むと警告やエラーの原因になる

## Still unclear

- 実務で連想配列のまま扱うべき場面と、クラスへ上げるべき場面
- 配列の形を静的解析でどこまで守れるか

## Differences from Go / TypeScript

- Goのslice / map のように型が分かれていない
- TypeScriptのobjectやarrayより、PHPの `array` は用途が広くて崩れやすい

## Next questions

- 関数に処理を分ける基準は何か
- nullable型や `null` をどう扱うと読みやすいか
