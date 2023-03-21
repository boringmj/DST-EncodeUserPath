# DST-EncodeUserPath

这是一个饥荒联机版(DST) `TheNet:EncodeUserPath(string)` 方法的 `php` 实现, 该方法在饥荒联机版中通过多次数据测试还原其编码过程\
目前这个方法还没有更好的用途, 并且以为其特殊性, 无法实现反编码过程\
但如果您正好需要一个用于在饥荒mod中签名的算法, 那么它将会成为你的一个可选选项, 虽然这个算发还是显得那么不尽人意, 但至少您可以直接调用饥荒提供的api实现了\
```
// DST
print(TheNet:EncodeUserPath("sign"))

// PHP
echo encode("sign")
```
