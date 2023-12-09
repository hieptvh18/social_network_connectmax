import { isAuth } from '@/middlewares/auth';

const setting = [
    {
        path:'/',
        component: ()=>import('@/layouts/MainLayout.vue'),
        meta:{
            title:'Setting'
        },
        beforeEnter: isAuth,

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