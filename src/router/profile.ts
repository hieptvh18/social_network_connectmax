const profile = [
    {
        path:'/',
        component: ()=>import('@/layouts/MainLayout.vue'),

        children:[
            {
                path:'/:username',
                name:'page.profile',
                component: () => import("@/pages/profile/Profile.vue")
            }
        ]
    }
];

export default profile;