import { isAuth } from '@/middlewares/auth';

const profile = [
    {
        path:'/',
        component: ()=>import('@/layouts/MainLayout.vue'),
        meta:{
            title:'Profile'
        },
        beforeEnter: isAuth,

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