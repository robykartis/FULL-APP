import { Button } from '@/components/ui/button'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import Image from 'next/image'

export default function Home() {
  return (
   <div className="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500">
  <div className="rounded-xl bg-gray-800 bg-opacity-50 px-28 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div className="text-white">
      <div className="mb-8 flex flex-col items-center">
    
        <h1 className="mb-2 text-2xl">Login</h1>
        <span className="text-gray-300">Enter Login Details</span>
      </div>
      <form action="#">
        <div className="mb-4 text-lg">
          <Label className='py-2'>User Name Or Email</Label>
          <Input type='text' name='username' placeholder='User Name or Email'/>
        </div>
        <div className="mb-4 text-lg">
          <Label className='py-2'>Password</Label>
          <Input type='password' name='password' placeholder='Passwor User'/>
        </div>
       
        <div className="mt-8 flex justify-center text-lg text-black">
        <Button>Login</Button>
        </div>
      </form>
    </div>
  </div>
</div>

  )
}
