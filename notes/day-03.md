# Day 03 Journal

Date: 2026-06-26
Phase: Phase 1
Day: Day 3 - 条件分岐とループ

## Today I learned

- `if` は真偽値になる条件式で分岐する
- `match` は1つの値に対して、決まった候補ごとに結果を返したいときに使う
- `foreach` は配列の各要素を順番に取り出して処理する
- PHPでは `0`, `''`, `'0'`, `null`, `false`, `[]` などが false 扱いされる
- 文字列 `'false'` は空文字ではないので false ではなく true 扱いになる

## Still unclear

- `match` が向かないケースを、実務上どう早く判断するか
- 緩い比較 `==` をどこまで避けるべきか

## Differences from Go / TypeScript

- PHPの truthy / falsy はGoよりかなり緩い
- `match` は値ベースの分岐をコンパクトに書きやすい

## Next questions

- list と連想配列はどう使い分けるのか
- 配列の形が崩れると、どんな不具合が起きやすいのか
