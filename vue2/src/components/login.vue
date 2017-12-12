<template>
 <div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top:10%">
        <p class="login-title">登录</p>
      </div>
    </div>
    <Form ref="formInline" :model="formInline" :rules="ruleInline" inline>
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 text-center col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
            <Form-item prop="user">
                <Input type="text" v-model="formInline.user" placeholder="用户名">
                    <i class="ivu-icon ivu-icon-ios-people-outline" slot="prepend"></i>
                </Input>
            </Form-item>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2 text-center col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
            <Form-item prop="password">
                <Input type="password" v-model="formInline.password" placeholder="密码">
                    <Icon type="ios-locked-outline" slot="prepend"></Icon>
                </Input>
            </Form-item>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <Button type="primary" @click="handleSubmit('formInline')">登录</Button>
            </Form-item>
        </div>
      </div>
    </Form>
  </div>
</template>

<script>

export default {
  data () {
    return {
        formInline: {
            user: '',
            password: ''
        },
        ruleInline: {
            user: [
                { required: true, message: '请填写用户名', trigger: 'blur' }
            ],
            password: [
                { required: true, message: '请填写密码', trigger: 'blur' }
            ]
        }
    }  
  }, 
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
.login-title{
  font-family: '黑体 Bold', '黑体';
  font-weight: 700;
  font-style: normal;
  font-size: 13px;
  color: #7B7B7B;
}
</style>
