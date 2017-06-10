### find流程
1. callstatic
2. __call
3. eloquent /builder负责定义函数比如说find where等函数逻辑
4. query/builder负责构建query

### find特殊用法
User::find([12345])

### get(字段)
接收字段值，如果空就是所有字段