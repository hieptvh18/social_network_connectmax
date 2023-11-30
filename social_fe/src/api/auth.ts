import Instance from './instance'
import { EnumGender } from '@/enums/GenderEnum'

// get data current user login
export const getUser = async () => {
  const url = '/accounts/user'
  return Instance.get(url);
}
// login with username & password
export const loginUsername = (formData: object) => {
  let url = '/login'
  return Instance.post(url, formData)
}

// login with social
export const loginSocial = async (provider: string, params: object) => {
  let url = '/auth/' + provider + '/callback'
  return Instance.get(url);
}

export const register = (formData: any) => {
  let url = '/register'
  return Instance.post(url, formData)
}

// api logout account
export const logout = () => {
  let url = '/accounts/logout'
  return Instance.delete(url);
}
