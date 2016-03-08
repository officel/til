# EC2 - Amazon Elastic Compute Cloud（Amazon EC2）-

* EC2をリストアップ

        aws ec2 describe-instances

* 特定のタグの付いているものだけ抽出

        aws ec2 describe-instances --filter "Name=tag:TAG_NAME,Values=TAG_VALUE" | jq '.Reservations[].Instances[].InstanceId'

* 特定のタグが付いているものだけ抽出しつつIPアドレスを一緒に抜き出して余計な記号を省く（テキストで出力）

        aws ec2 describe-instances --filter "Name=tag:TAG_NAME,Values=TAG_VALUE" --query "Reservations[].Instances[].[InstanceId,PublicIpAddress]" --output=text