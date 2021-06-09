# vue-lara-spa(タスク管理アプリ)

 達成、もしくは達成できなかったタスクに評価をつけて一覧で見ることができます。
 既存のタスク管理ツールでは、達成/未達成2つの評価軸しかなかったため作成しました。
 ヘッダーにある"DoneTask"ボタンより、過去の達成/未達成タスクを一覧でご覧いただけます。

↓こちらがトップページです。ヘッダーの"Top"を押すとこの画面になります。
<img width="1280" alt="スクリーンショット 2021-06-09 16 48 37" src="https://user-images.githubusercontent.com/75630003/121315090-f7f53980-c942-11eb-837c-18e33040cd8e.png">

↓"Done"ボタンを押すとこのようにモーダルが表示され、タスクに3段階の評価とコメントを加えることができます。
<img width="1280" alt="スクリーンショット 2021-06-09 16 55 51" src="https://user-images.githubusercontent.com/75630003/121316142-f9733180-c943-11eb-81c5-15a8f80b1581.png">

↓先ほど、評価とコメントを加えられたタスクはこちらのページよりご覧になれます。
<img width="1280" alt="スクリーンショット 2021-06-09 17 01 06" src="https://user-images.githubusercontent.com/75630003/121316431-49ea8f00-c944-11eb-9e77-2a1c7dd5dae5.png">

# 使用技術

- PHP 7.2.34
- Laravel Framework 7.30.4
- Vue.js 2.6.12
- laravl/ui
- axios
- PostgreSQL 12.4

# 機能一覧

- ユーザストレスの軽減を図るため、axiosを用いてほとんどの処理を非同期通信(Ajax)で実装しております。
  - タスク追加機能(Ajax)
  - タスク一覧ページより、達成/未達成のタスクを追加する機能(Ajax)
  - タスク編集機能(Ajax)
  - タスク削除機能(Ajax)

# 公開先URL

https://vue-lara-spa.herokuapp.com/