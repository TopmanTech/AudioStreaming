/// <reference types="vite/client" />

interface ImportMetaEnv {
  readonly VITE_AudioStreaming_ENV: 'demo' | undefined
}

interface ImportMeta {
  readonly env: ImportMetaEnv
}
