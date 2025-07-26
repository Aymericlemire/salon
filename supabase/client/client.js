import { createClient } from 'https://esm.sh/@supabase/supabase-js'

let supabase;

export async function loadSupabase() {
  const response = await fetch('../config/config.json')
  const config = await response.json()

  const supabaseUrl = 'https://voqgffdqjtfthtqieeve.supabase.co'
  const supabaseKey = config.SUPABASE_KEY

  supabase = createClient(supabaseUrl, supabaseKey)
  console.log("SUPABASE_KEY", supabaseKey)

  return supabase
}
