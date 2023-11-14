const login = [
    {
        'path': "/",
        component: ()=> import('@/layouts/AuthLayout.vue'),

        children:[
            {
                'path':'login',
                'name':'page.login',
                component: ()=> import("@/pages/auth/Login.vue")
            }
        ]
    }
];

export default login;
