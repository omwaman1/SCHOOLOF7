"""
Video Compression Script for School of 7
Compresses the hero video to a smaller, web-optimized size
"""

from moviepy import VideoFileClip
import os

def compress_video(input_path, output_path, target_resolution=720, bitrate="2500k"):
    """
    Compress video for web usage
    
    Args:
        input_path: Path to original video
        output_path: Path to save compressed video
        target_resolution: Target height in pixels (720 = 720p)
        bitrate: Target bitrate (e.g., "2500k" for 2.5 Mbps)
    """
    print(f"Loading video: {input_path}")
    print(f"Original file size: {os.path.getsize(input_path) / (1024*1024):.2f} MB")
    
    # Load the video
    video = VideoFileClip(input_path)
    
    # Get original dimensions
    original_width, original_height = video.size
    print(f"Original resolution: {original_width}x{original_height}")
    
    # Calculate new dimensions maintaining aspect ratio
    if original_height > target_resolution:
        new_height = target_resolution
        new_width = int(original_width * (target_resolution / original_height))
        # Make width even (required for some codecs)
        new_width = new_width if new_width % 2 == 0 else new_width + 1
        video = video.resized(height=new_height)
        print(f"New resolution: {new_width}x{new_height}")
    
    # Write compressed video with web optimization
    print(f"Compressing video with bitrate: {bitrate}")
    print("This may take a few minutes...")
    
    video.write_videofile(
        output_path,
        codec="libx264",
        bitrate=bitrate,
        audio=False,  # No audio needed for hero video
        preset="medium",
        ffmpeg_params=["-movflags", "+faststart"]  # Web optimization
    )
    
    video.close()
    
    # Show results
    new_size = os.path.getsize(output_path) / (1024*1024)
    print(f"\n✅ Compression complete!")
    print(f"New file size: {new_size:.2f} MB")
    print(f"Saved to: {output_path}")

if __name__ == "__main__":
    input_video = "images/hero-video.mp4"
    output_video = "images/hero-video-compressed.mp4"
    
    if os.path.exists(input_video):
        compress_video(input_video, output_video)
    else:
        print(f"Error: Video file not found at {input_video}")
