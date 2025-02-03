# Forum
Simple Dev Forum
### Build Image

#### From `DockerFile`
```bash
docker build --pull --rm -f DockerFile -t forum:latest .
```

#### From `.tar`
```bash
docker load < forum.tar
```

### Use

```bash
docker run -p 3000:80 -p 3022:22 -it forum
```
