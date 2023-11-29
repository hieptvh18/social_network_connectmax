const setting = [
    {
        path:'/',
        component: ()=>import('@/layouts/MainLayout.vue'),
        meta:{
            title:'Setting'
        },
        children:[
            {
                path:'/setting',
                name:'page.setting',
                component: () => import("@/pages/setting/Setting.vue")
            }
        ]
    }
];

export default setting;