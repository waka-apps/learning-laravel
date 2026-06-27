# Day 05 Journal

Date: 2026-06-26
Phase: Phase 1
Day: Day 5 - 関数に分ける

## Today I learned

- 小さな処理を関数に分けると、処理の意図を関数名で表現できる
- `currentStatus(array $shipment): ?string` の `?string` は、`string` または `null` を返す意味
- `isDelivered(array $shipment): bool` のように、真偽値を返す関数にすると呼び出し側が読みやすい
- `?? null` を使うと、キーがなければ `null` を返せる
- 関数に分けると、連想配列のキーアクセスを関数の中に閉じ込められる

## Still unclear

- 配列のまま関数に渡す段階から、いつクラスへ上げるべきか
- 例外を投げるべき場面と `null` を返すべき場面の違い

## Differences from Go / TypeScript

- TypeScriptのユーティリティ関数に近いが、PHPでは `null` を返す設計がより頻繁に出る
- Goの複数戻り値とは違い、PHPでは `null` を戻り値に含める書き方が自然

## Next questions

- class と function はどう使い分けるのか
- constructor と property の最小形はどう書くのか
