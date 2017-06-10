- 应用场景:当一个事件发生的时候就可以执行监听者内定义的程序。  
- 可以用event:generate生成事件和监听者。他会遍历eventserviceprovide中的listen属性(这是一个数组，事件=>监听者)，从而创建监听者和事件。
- 事件的路径app/event,监听者app/listen

- 命名习惯,事件可以用usersignup,监听者可以用handleusersignup
- 在事件中，通过构造函数来接收参数，并且用属性来保存数据。
- 在监听者中有一个handle方法，接收事件对象。handle(Usersignup $event){}
- 如果监听者需要用到其他的工具类，可以在构造方法中注入。
- 通过helperfunction  event(new…)来触发事件