- 出题人: xidaner
- 难度: 简单
- 考点: 二次转码。
- 解法: 浏览器转码一次，然后 urldecode 转码一次，那么我们就可以利用 %25，转码之后就是 %，那么我们只要找到字母的 url 编码就可以成功绕过了。将 `XXXCTF` 二次编码即可绕过检测。
- flag: flag{lbwnb}
- 注意点: 无