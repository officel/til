# configure - AWS CLI options -

* 設定（上書きもOK）

        aws configure

* 追加設定

        aws cofigure --profile PROFILE_NAME

profile オプションは他のコマンドにも渡せるので１箇所で管理する場合よく使う。

* 設定表示

        aws configure list

* 個別に設定する、取得するのは set / get が使える

list だとシークレットキーは一部隠しで表示されるが、 get の場合はそのまま表示される（ソーシャルエンジニアリングに注意）
うまく使えば環境変数の書換に使えて Ansible や Terraform の実行時に便利かも？（TODO）

