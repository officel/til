# ELB - Elastic Load Balancing -

* ELB をリストアップ

        aws elb describe-load-balancers

* 名前だけ抽出

        aws elb describe-load-balancers | jq '.LoadBalancerDescriptions[].LoadBalancerName'
