const login = [
    {
        'path': "/auth",
        component: ()=> import('@/layouts/AuthLayout.vue'),

        children:[
            {
                'path':'register',
                'name':'page.signup',
                meta:{
                    title:'Sign Up'
                },
                component: ()=> import("@/pages/auth/SignUp.vue")
            },
            {
                'path':'register/verify',
                'name':'page.signup.verify',
                meta:{
                    title:'Verify Sign Up'
                },
                component: ()=> import("@/pages/auth/VerifyCodeRegister.vue")
            },
            {
                path:'login',
                name:'page.signin',
                meta:{
                    title:'Sign In'
                },
                component: ()=> import("@/pages/auth/SignIn.vue")
            },
            {
                path:'forgotpassword',
                name:'page.forgot',
                meta:{
                    title:'Forgot Password'
                },
                component: ()=> import("@/pages/auth/ForgotPassword.vue"),
            },
            {
                path:'forgotpassword/verify',
                name:'page.forgotpassword.verify',
                meta:{
                    title:'Verify Forgot Password'
                },
                component: ()=> import("@/pages/auth/VerifyEmail.vue")
            }
        ]
    }
];

export default login;
