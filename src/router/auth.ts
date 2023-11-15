const login = [
    {
        'path': "/",
        component: ()=> import('@/layouts/AuthLayout.vue'),

        children:[
            {
                'path':'register',
                'name':'page.signup',
                component: ()=> import("@/pages/auth/SignUp.vue")
            },
            {
                'path':'login',
                'name':'page.signin',
                component: ()=> import("@/pages/auth/SignIn.vue")
            }
        ]
    }
];

export default login;
