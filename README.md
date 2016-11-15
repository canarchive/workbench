基于Yii2的Web项目平台
======================

介绍
-----
本平台是一个基于Yii2研发的多应用系统，各应用以分支的形式存在版本库系统。应用包括但不限于如下列表：

- [common 底层通用](docs/guide/common.md).
- [backend 后台](docs/guide/backend.md).
- [spread 推广](docs/guide/spread.md).
- [gallerycms CMS系统](docs/guide/gallerycms.md).
- [merchant 客户商家](docs/guide/merchant.md).
- [passport 用户](docs/guide/passport.md).
- [paytrade 充值支付](docs/guide/paytrade.md).
- [spider 采集](docs/guide/spider.md).
- [restapp API](docs/guide/restapp.md).

同一应用可以根据使用情况，再做进一步的细分，如spread推广应用在不同的应用场景下，存在较大的差异性，这个时候，把推广底层功能抽象出来作为一个spread应用，然后基于spread派生出一个结合具体业务的应用分支，如针对广告系统派生出了spread-ad应用分支；

根据项目需求，可以将多个应用组合成一个完整的web项目，如backend、passport、shop、paytrade、spread-groupbuy组合成一个集线下团购线上商城于一体的团购电商网站；backend、restapp、paytrade、shop等应用组合成一个App电商应用；

安装
------

- [安装](docs/guide/install.md).

DEMO
------

基于backend、merchant、gallerycms、spread的家装平台：

[后台地址](https://hadmin.91zuiai.com)
测试账号：testadmin
密码： test!@#

