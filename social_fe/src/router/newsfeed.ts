import { isAuth } from '@/middlewares/auth';

const newsfeed = [
    {
        path:'',
        meta:{
            title:'Connect Max'
        },
        component: ()=>import('@/layouts/MainLayout.vue'),
        beforeEnter: isAuth,

        children:[
            {
                path:'',
                name:'page.newsfeed',
                component: ()=> import('@/pages/newsfeed/NewsFeed.vue')
            }
        ]
    }
];
export default newsfeed;