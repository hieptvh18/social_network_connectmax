import Instance from './instance'
import { EnumGender } from '@/enums/GenderEnum'

// get data current user login
export const getUser = async () => {
  const url = '/accounts/user'
  return Instance.get(url)
}
// login with username & password
export const loginUsername = (formData: object) => {
  let url = '/login'
  return Instance.post(url, formData)
}

// login with social
export const loginSocial = async (provider: string, params: object) => {
  let url = '/auth/' + provider + '/callback'
  return Instance.get(url)
}

// register
export const register = (formData: any) => {
  let url = '/register'
  return Instance.post(url, formData)
}

// find user by username public
export const getUserByUsername = (username: string | null) => {
  let url = '/public/user/'+username;
  return Instance.get(url);
}

// verify register email
export const verifyRegister = (data: any)=>{
  const url = '/user/register/verify';
  return Instance.post(url,data);
}

// api logout account
export const logout = () => {
  let url = '/accounts/logout'
  return Instance.delete(url)
}
