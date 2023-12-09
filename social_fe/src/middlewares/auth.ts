import { useAuthStore } from "@/stores/auth";

// using for route auth
export const isNotAuth = async (to: any, from : any, next : any) => {
    const auth = useAuthStore();
    await auth.loadlUserState();

    if(auth.isAuthenticated) next('/')
    else next()
}

// using for route needed auth user
export const isAuth = async (to: any, from : any, next : any) => {
    const auth = useAuthStore();
    await auth.loadlUserState();

    if(!auth.isAuthenticated) next('/auth/login')
    else next()
}