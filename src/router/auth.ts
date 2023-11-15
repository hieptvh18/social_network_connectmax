const login = [
    {
        'path': "/auth",
        component: ()=> import('@/layouts/AuthLayout.vue'),

        children:[
            {
                'path':'register',
                'name':'page.signup',
                component: ()=> import("@/pages/auth/SignUp.vue")
            },
            {
                path:'login',
                name:'page.signin',
                component: ()=> import("@/pages/auth/SignIn.vue")
            },
            {
                path:'forgotpassword',
                name:'page.forgot',
                component: ()=> import("@/pages/auth/ForgotPassword.vue"),
            },
            {
                path:'forgotpassword/verify',
                name:'page.forgotpassword.verify',
                component: ()=> import("@/pages/auth/VerifyEmail.vue")
            }
        ]
    }
];

export default login;
