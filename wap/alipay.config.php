<?php
/* *
 * 配置文件
 * 版本：3.4
 * 修改日期：2016-03-08
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 * 安全校验码查看时，输入支付密码后，页面呈灰色的现象，怎么办？
 * 解决方法：
 * 1、检查浏览器配置，不让浏览器做弹框屏蔽设置
 * 2、更换浏览器或电脑，重新登录查询。
 */

//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://b.alipay.com/order/pidAndKey.htm
$alipay_config['partner']		= '2088211697060642';

//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
$alipay_config['seller_id']	= $alipay_config['partner'];

//商户的私钥,此处填写原始私钥，RSA公私钥生成：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.nBDxfy&treeId=58&articleId=103242&docType=1
$alipay_config['private_key_path']	= '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDMNVoEdDq7nlnjf2ymAAF5dD+s50cWlCsv86xro9Hf4DNung19
JSjb6ahymBFuFvNH8e421LQZiR4m0pTEB3QBo9MXU+/zSDFriyolOClNu7flWVUu
80i9mVUN2qkFNv7tPVPCfkBcdTAB8Hu3CfQssXPSC+Hqa57ptxmcimxUzwIDAQAB
AoGATx6csf0WhHrl+O71+Zsm9xfDVAqH0Ie38+xFca8XMdZ8Fu/F6ibrncj6Kuwg
VLcvq0BhO31OClbGB+SvHwSEPSzNAVye0V+ZICVUQtNeSNgpS1ugTNTbxG7IOL6O
RQXulZanVOidUzWO8icoLHdt8pSCHtmLWd17BOY7rz5hbYECQQD1dKThUJtxR6WV
+tUMUVgY58T2Ox8l7ANwLsqkBD2/lPNLwt9qWb/dy6JVW1v3ThQwti2HqG1CWrhJ
Er0e+43jAkEA1PsZJVpSiD/BIk6vwGZGEKTcGmT8ZJW8y/IVVTjThbv3oejYl9SW
RWyvEhHNH5wnpC6Gt726sV0CzGM/nuRRJQJBALhuA7GU2qdcWUv/I/PUbyiPhYwq
UjYxR0gUsIha83avWbv0WeDUPPlPl9MhCVIiJcOQL1e+MxJnjg7B+L5971cCQEHA
t9WxWfOYgz7dPiNPL+hpjU5UyRsgo2XveiiSX7NVAbGp2lydlDsgv7f7aPGOWyqz
9oF5gM7LIVcKeRTL9kUCQDbQblqdZwsG8ymhxtTZZzRULtX6YqA1zDUwm714OFVM
1AP3mCnPiNVELNtxMHveVq1lcFBO9pwB5Mb4y+agXyg=
-----END RSA PRIVATE KEY-----';

//支付宝的公钥，查看地址：https://b.alipay.com/order/pidAndKey.htm
$alipay_config['ali_public_key_path']= '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRA
FljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQE
B/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5Ksi
NG9zpgmLCUYuLkxpLQIDAQAB
-----END PUBLIC KEY-----';
// 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['notify_url'] = "https://pay.kongqueyun.com/payx_api/notify/ch_id/ch_rm63v10ksthwwr6dvkls55t6";

// 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['return_url'] = "http://www.51meiliwo.com";

//签名方式
$alipay_config['sign_type']    = strtoupper('RSA');

//字符编码格式 目前支持utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert']    = getcwd().'\\cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

// 支付类型 ，无需修改
$alipay_config['payment_type'] = "1";

// 产品类型，无需修改
$alipay_config['service'] = "alipay.wap.create.direct.pay.by.user";

//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


?>